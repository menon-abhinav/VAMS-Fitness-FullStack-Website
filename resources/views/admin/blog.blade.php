<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/admin_style_2.css">
</head>
<body>




  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/admin">Home</a>
    <a href="/adminmember">Members</a>
    <a href="/adminorder">Orders</a>
    <a href = "/adminblog">Blog</a>
    <a href = "/admincomment">Comment</a>
    <a href = "/admintransaction">Transaction</a>
    <a href = "/admincontact">Contact</a>
  
  </div>
<div id="main">
  <h2><center>Admin Panel</center></h2>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<div id="content1">
    <table border=1>

    <tr>
        <th>User Id</th>
        <th>Subject</th>
        <th>Content</th>
        <th>Date</th>
        <th>Delete</th>
    </tr>
	@foreach($blogs as $blog)

    <tr>
    <td>{{$blog->user_id}}</td>
      <td>{{$blog->subject}}</td>
    <td>{{gzinflate($blog->content)}}</td>
    <td>{{$blog->created_at}}</td>
    <td><a href = "/adminblog/delete/{{$blog->id}}">Delete</a></td>
      </tr>
    @endforeach
    </table>
</div>
<br>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("content1").style.marginLeft = "250px";
  document.getElementById("content2").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("content1").style.marginLeft= "18px";
  document.getElementById("content2").style.marginLeft= "18px";
  document.body.style.backgroundColor = "rgba(0,0,0,0)";
  document.body.style.backgroundColor = "#CCE5FF";
}
</script>
   
</body>
</html>