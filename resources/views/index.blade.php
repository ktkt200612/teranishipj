<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <td>氏名</td>
      </tr>
      <tr>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <td>メールアドレス</td>
      </tr>
      <tr>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信する">
  </form>
</body>

</html>
