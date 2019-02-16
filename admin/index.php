<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <link rel="stylesheet" href="jquery-ui.css">
    <style>
        .left-border{
            /*border-bottom: 1px solid #aeaeae;*/
            padding: 0 5px;
        }
        #nav-manage-table tr{
            height: 30px;
        }
        #nav-manage-table input{
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            outline-color: orange;
            -moz-outline-radius: 5px;
            padding: 2px 5px;
        }
    </style>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost:3336","root","myoa888","user") or die('数据库链接失败');
    $navs = selectNav($conn);
    function selectNav($conn){
        $sql = "SELECT description,src,layer FROM nav ORDER BY layer ";
        $res_set = mysqli_query($conn,$sql);
        $res = [];
        while( $res_arr = mysqli_fetch_array($res_set)){
            array_push($res, $res_arr);
        }
        return $res;
    }
?>
<div id="accordion">
    <h3>导航管理</h3>
    <div>
        <table style="text-align: center" id="nav-manage-table">
            <tr>
                <td>显示顺序</td>
                <td class="left-border">显示文字</td>
                <td class="left-border">跳转链接</td>
            </tr>
            <tr>
                <td>1</td>
                <td class="left-border"><input type="text" class="nav" name="nav1_description" value="<?php echo iconv("gb2312","utf-8",$navs[0][0])?>"></td>
                <td class="left-border"><input type="text" class="nav" name="nav1_src" value="<?php echo $navs[3][0];?>"></td>
            </tr>

            <tr>
                <td>2</td>
                <td class="left-border"><input type="text" class="nav" name="nav2_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav2_src"></td>
            </tr>

            <tr>
                <td>3</td>
                <td class="left-border"><input type="text" class="nav" name="nav3_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav3_src"></td>
            </tr>

            <tr>
                <td>4</td>
                <td class="left-border"><input type="text" class="nav" name="nav4_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav4_src"></td>
            </tr>
            <tr>
                <td>5</td>
                <td class="left-border"><input type="text" class="nav" name="nav5_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav5_src"></td>
            </tr>
            <tr>
                <td>6</td>
                <td class="left-border"><input type="text" class="nav" name="nav6_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav6_src"></td>
            </tr>
            <tr>
                <td>7</td>
                <td class="left-border"><input type="text" class="nav" name="nav7_description"></td>
                <td class="left-border"><input type="text" class="nav" name="nav7_src"></td>
            </tr>
        </table>
    </div>
    <h3>中轮播管理</h3>
    <div>Phasellus mattis tincidunt nibh.</div>
    <h3>安全日历管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>友情链接管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目标题管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目1内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目2内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目3内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目4内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目5内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
    <h3>栏目6内容管理</h3>
    <div>Nam dui erat, auctor a, dignissim quis.</div>
</div>
</body>
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>
    $( "#accordion" ).accordion();
    $(("#nav-manage-table tr")).css("border", "1px solid #ccc")
</script>
</html>