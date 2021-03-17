<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <form  method="POST" action="Inquiry.php">
            <dl>
                <dt>お名前</dt>
                <dd><input type="text" name="name" id="name" ></dd>
                
                <dt>メールアドレス</dt>
                <dd><input type="email" name="email" id="email"></dd>
                
                <dt>お問い合わせ内容</dt>
                
                <dd>
                <label for="maiking"> <input type="radio" name="kind" id="maiking" value="制作のご依頼">制作のご依頼 </label>
                <label for="ivant">  <input type="radio" name="kind" id="ivant" value="イベント出演依頼">イベント出演依頼</label>
                <label for="other">   <input type="radio" name="kind" id="other" value="その他">その他</label>
                </dd>
                
            
                <dt>お問い合わせ詳細</dt>
                <dd>
                    <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
                </dd>
            </dl>
            <input type="submit" value="送信">
        </form>
    
    
</body>
</html>