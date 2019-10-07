@extends('layouts.master')
@section('content')

<form name="form1" method="post" action="#">
  <div class="card mx-auto" style="width: 50%">
    <div class="card-body mx-auto">
      ลงชื่อเข้าใช้<br>
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
        </tbody>
      </table>
      <br>
      <input class="mx-auto" type="submit" name="Submit" value="ลงชื่อเข้าใช้">
    </div>
  </div>
</form>

@endsection