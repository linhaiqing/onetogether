var t = c = 0,
count;
$(document).ready(function() {
    //bannerͼ�л� 
    var ul = $(".banner_center ul");
    var li = $(".banner_center li");
    var tli = $(".banner_btn li");
    var speed = 350;
    var autospeed = 5000;
    var index = 0;
    var n = 0;
    /* ���ⰴť�¼� */
    function lxfscroll() {
        var index = tli.index($(this));
        tli.removeClass("curs");
        $(this).addClass("curs");
        //ul.animate({left:index*-1920},speed); 
        ul.stop(true, true).animate({
            left: index * -1920
        },
        speed);
    };
    /* �Զ��ֻ� */
    function autoroll() {
    	n = 0;
        tli.removeClass("curs");
        tli.eq(n).addClass("curs");
        n++;
        timer = setTimeout(autoroll, autospeed);
        ul.stop(true, true).animate({
            left: (n - 1) * -1920
        },
        speed);
        //ul.animate({left:(n-1)*-1920},speed);
    };

    /* �����ͣ��ֹͣ�Զ��ֻ� */
    function stoproll() {
        li.hover(function() {
            clearTimeout(timer);
            n = $(this).prevAll().length + 1;
        },
        function() {
            timer = setTimeout(autoroll, autospeed);
        });
        tli.hover(function() {
            clearTimeout(timer);
            n = $(this).prevAll().length + 1;
        },
        function() {
            timer = setTimeout(autoroll, autospeed);
        });
    };
    tli.mouseenter(lxfscroll);
    autoroll();
    stoproll();
    // ���Ŷ�̬�л�
    $("#news_nav a").hover(function() {
        var $index = $("#news_nav a").index(this);
        $("#news_content>div").hide().eq($index).show();
        $("#news_nav a").removeClass("cursrent");
        $(this).addClass("cursrent");
    });
    // ������ѶͼƬ��ʾ���Ұ�ť
    $(".consulting_img").hover(function() {
        $(".img_icon").show();
    },
    function() {
        $(".img_icon").hide();
    });
    // ������ѶͼƬ�����
    //	var cnt_tmp = 0;
    //	$("#img_icon a").click(function(){
    //		if($("#consulting_imgul").is(":animated")){return false;}
    //		var tem = $("#consulting_imgul").css("left");
    //		if(tem=="0px"){
    //			return false;
    //			}else{
    //				cnt_tmp = cnt_tmp - 1;
    //				$("#consulting_imgul").stop(true,true).animate({left:"+=375px"},200);
    //				$("#consulting_bottom>div").hide().eq(cnt_tmp).show();
    //				}
    //		});
    // ������ѶͼƬ�ҹ���	
    //$("#last_imgicon a").click(function(){
    //		if($("#consulting_imgul").is(":animated")){return false;}
    //		var tem = $("#consulting_imgul").css("left");
    //		if(tem=="-1500px"){
    //			return false;
    //			}else{
    //				cnt_tmp = cnt_tmp + 1;
    //				$("#consulting_imgul").stop(true,true).animate({left:"-=375px"},200);
    //				$("#consulting_bottom>div").hide().eq(cnt_tmp).show();
    //			}
    //		});
    count = $("#consulting_imgul li").length;
    $("#consulting_imgul li:not(:first-child),#consulting_bottom>div:not(:first-child)").hide();
    //������
    $(".consulting_btn a").click(function() {
        if ($("#consulting_imgul li").is(":animated")) {
            return false;
        }
        var $i = $(this).index(); //��ȡLiԪ���ڵ�ֵ����1��2��3��4
        c = $i;
        if ($i >= count) return;
        //���뵭��
        $("#consulting_imgul li").filter(":visible").fadeOut(500).parent().children().eq($i).fadeIn(1000);
        $("#consulting_bottom>div").filter(":visible").hide().parent().children().eq($i).show();
        //document.getElementById("banner").style.background="";
        $(".consulting_btn a").removeClass("on");
        $(this).addClass("on");
    });
    //�ֲ�
    t = setInterval("showAuto()", 7000);
    $("#consulting_imgul li").hover(function() {
        clearInterval(t)
    },
    function() {
        t = setInterval("showAuto()", 7000);
    });
    $("#last_imgicon a").click(function() {
        if ($("#consulting_imgul li").is(":animated")) {
            return false;
        }
        //if($("#banner_list a").is(":animated")){return false};
        c = c >= (count - 1) ? 0 : ++c;
        $(".consulting_btn a").eq(c).trigger('click');
    });
    $("#img_icon a").click(function() {
        if ($("#consulting_imgul li").is(":animated")) {
            return false;
        }
        c = c - 1;
        $(".consulting_btn a").eq(c).trigger('click');
    });
});
function showAuto() {
    if ($("#consulting_imgul li").is(":animated")) {
        return false;
    }
    c = c >= (count - 1) ? 0 : ++c;
    $(".consulting_btn a").eq(c).trigger('click');
}