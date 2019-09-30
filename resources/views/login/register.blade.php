@extends('layouts.master')
@section('content')   

<form name="form1" method="post" action="check_login.php">
<div class="card mx-auto" style="width: 50%">
  <div class="card-body mx-auto">
  สมัครสมาชิก<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;อีเมล</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;รหัสผ่าน</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;ยืนยันรหัสผ่าน</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="สมัครสมาชิก">
  </div>
  </div>
</form>

@endsection