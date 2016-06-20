(function(){

var iOS = navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false,
	isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|MicroMessenger|QQ|Opera Mini/i.test(navigator.userAgent),
	current_faces, image_orig_width, image_orig_height, image_orig_rotation, add_rect, selectedImage, bias;

$("#shareContainer").hide();
$("#uploadBtn").bind("change", handleFileSelect);
$("#analyzingLabel").hide();
// document.getElementById('saveDone').addEventListener('click', function() { saveImage(this); }, false);
window.addEventListener("orientationchange", orientationChange, false);

function orientationChange(evt) {
	// if (window.orientation == 90) {
	// 	updateOrigImageDimensions(90);
	// } else if (window.orientation == -90) {
	// 	updateOrigImageDimensions(270);
	// }
}

function handleFileSelect(evt) {
	$("#alert").hide();
	var files = evt.target.files; // FileList object

	// Loop through the FileList and render image files as thumbnails.
	for (var i = 0, f; f = files[i]; ++i) {

		if (f != null && f.size > 3145728) {
			$("#demoImg").hide();
			$("#alert").html("上传的图片请不要大于3M");
			$("#alert").show();
			return;
		}

		// Only process image files.
		if (!f.type.match('image.*')) {
			alert("亲儿，请传入图片~~");
			return;
		}


		var reader = new FileReader();
		reader.onload = (function(theFile) {
			return function(e) {
				loadImage.parseMetaData(theFile, function(e) {
	                var i = 0,
	                    r;
	                e && e.exif && (r = e.exif.get("Orientation"), r === 8 ? i = 90 : r === 3 ? i = 180 : r === 6 && (i = 270));
	                // processRequest(!0, null, null, theFile.size, i);
	                bias = i;
	            });

				var params = {
					// Specify your subscription key
					'subscription-key': 'ff8d2e6de37e498780378b54a10067a4',
					// Specify values for optional parameters, as needed
					analyzesFaceLandmarks: "false",
					analyzesAge: "true",
					analyzesGender: "true",
					analyzesHeadPose: "false",
				};

				$.ajax({
					url: 'https://api.projectoxford.ai/face/v0/detections?' + $.param(params),
					type: 'POST',
					contentType: 'application/octet-stream',
					data: e.target.result,
					processData: false,
					beforeSend: function() {
						$("#analyzingLabel").show();
						$("#demoImg").hide();
						$("#results").show();
						$("#faces").html("<div><\/div>");
					}
				})
				.done(function(data) {
					current_faces = data;
					updateUI(data);
				})
				.fail(function() {
					console.log("error");
					$("#jsonEventDiv").hide();
		            $("#analyzingLabel").html(e);
		            $("#analyzingLabel").css("visibility", "visible")
				});

			};
		})(f);
		reader.readAsArrayBuffer(f);


		var reader2 = new FileReader();
		reader2.onload = (function(theFile) {
			return function(e) {
				$("#thumbnail").attr('src', e.target.result);
			};
		})(f);
		reader2.readAsDataURL(f);
	}
}

function updateUI(data) {
	$("#analyzingLabel").hide();
	$("#results").css("margin-top", "20px");
	$("#uploadFileId").html("再试一次!");
	$("#shareContainer").show();

	//check data form
	if (!data || data.length === 0) {
		alert("检测失败, 我们还需要努力！");
		return;
	}
	updateOrigImageDimensions(bias);
	// isMobile? updateOrigImageDimensions(90) : updateOrigImageDimensions(0);
}


function drawFaceRects() {
    var n, t;
    if ($("#faces").html("<div><\/div>"), n = $("#thumbnail"), t = $("#thumbContainer"), current_faces != null) {

        var i = n.height() / image_orig_height,
            r = n.width() / image_orig_width,
            u = n.offset().left - t.offset().left,
            f = current_faces.length;

        $.each(current_faces, function(t, e) {
            var s = e.faceRectangle,
                l = e.attributes.age,
                a = e.attributes.gender,
                o = {},
                h, c;
            o.top = Math.round(i * s.top);
            o.height = Math.round(i * s.height);
            o.left = Math.round(r * s.left) + u;
            o.width = Math.round(r * s.width);
            h = adjustRectOrientation(o, n.width(), n.height(), image_orig_rotation);
            c = $("#faces");
            add_rect(h, l, a, t, c, f);
        });
    }
}


function adjustRectOrientation(n, t, i, r) {
    var u = {};
    return iOS || r === 0 ? n : r === 270 ? (u.height = n.width, u.width = n.height, u.left = n.top, u.top = i - u.height - n.left, u) : r === 180 ? (u.height = n.height, u.width = n.width, u.left = t - u.width - n.left, u.top = i - u.height - n.top, u) : r === 90 ? (u.height = n.width, u.width = n.height, u.left = t - u.width - n.top, u.top = n.left, u) : n;
}


function add_rect(n, t, i, r, u, f) {
    var o = "rect" + Math.round(Math.random() * 1e4),
        e = null,
        c = "n/a",
        s, h, l, a;
    t != null && (c = Math.round(Number(t)));
    s = "./icon-gender-male.png";
    i != null && i.toLowerCase() === "female" && (s = "./icon-gender-female.png");
    h = f <= 2 ? "big-face-tooltip" : "small-face-tooltip";
    e = '<div><span><img src="' + s + '" class=' + h + "><\/span>" + c + "<\/div>";
    $(e).css("background-color", "#F1D100");
    l = '<div data-html="true" class="child face-tooltip ' + h + ' " id="' + o + '"/>';
    $(l).appendTo(u).css("left", n.left + "px").css("top", n.top + "px").css("width", n.width + "px").css("height", n.height + "px").css("border", "1px solid white").css("position", "absolute");
    if (e !== null) {
		a = "top";
		$("#" + o).tooltip({
			trigger: "manual",
			show: !0,
			placement: a,
			title: e,
			html: !0
		});
		$("#" + o).tooltip("show");
	}
}


function updateOrigImageDimensions(t) {
    var r = document.getElementById("thumbnail"),
        i = new Image();
    i.onload = function() {
        image_orig_width = iOS && (t === 270 || t === 90) ? i.height : i.width;
        image_orig_height = iOS && (t === 270 || t === 90) ? i.width : i.height;
        image_orig_rotation = t;
        drawFaceRects();
    };
    i.src = r.src;
}

function saveImage(link) {
	html2canvas(document.body, {
		onrendered: function(canvas) {
			var image = canvas.toDataURL("image/png");
			// document.location.href = image;
			// link.href = canvas.toDataURL();
			// link.download = "年龄测试.png";

			$.ajax({
				url: './upload.php',
				type: 'POST',
				data: {file: image}
			})
			.done(function(data) {

			})
			.fail(function() {
				alert("分享失败, 请重试");
			});
		}
	});
}


//分享到QQ空间
$('#shareToQzone').on('click', function(e) {
	$("#shareLabel").show();
	e.preventDefault();
	html2canvas(document.body, {
		onrendered: function(canvas) {
			var image = canvas.toDataURL("image/png");
			$.ajax({
				url: './upload.php',
				type: 'POST',
				data: {file: image}
			})
			.done(function(data) {
				var picInfo = JSON.parse(data);
				var p = {
					url: 'http://funny.xiaonimei.com/nianling/',
					showcount:'0',/*是否显示分享总数,显示：'1'，不显示：'0' */
					desc:'真得好神奇!',/*默认分享理由(可选)*/
					summary:'奇葩菌火热出炉的最精确年龄测试工具, 趁热乎赶紧试试吧!',/*分享摘要(可选)*/
					title:'最精确的年龄测试工具 -- 读图测年龄',/*分享标题(可选)*/
					site:'笑你妹微测试',/*分享来源 如：腾讯网(可选)*/
					pics: picInfo.url, /*分享图片的路径(可选)*/
					// style:'101',
					// width:199,
					// height:30
				};
				var s = [];
				for (var idx in p){s.push(idx + '=' + encodeURIComponent(p[idx]||''));}
				s = s.join('&');
				var f = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?'+s;
				$("#shareLabel").hide();
				location.href = f;
			})
			.fail(function() {
				alert("分享失败, 请重试");
			});
		}
	});

});


//分享到QQ空间
$('#shareToWechat').on('click', function(e) {
	$("#shareLabel").show();
	e.preventDefault();
	html2canvas(document.body, {
		onrendered: function(canvas) {
			var image = canvas.toDataURL("image/png");
			location.href = "http://xiaonimei.com";
		}
	});

});

})();