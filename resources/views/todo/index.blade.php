<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="//www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <title>testpage</title>
</head>

<body>
testpage
@foreach($todos as $i)
  <div>
    <div>{{{ $i->id }}}</div>
    <div>{{{ $i->tag }}}</div>
    <div>{{{ $i->body }}}</div>
    <div>{{{ $i->username }}}</div>
    <div>{{{ $i->created_at }}}</div>
    <div>{{{ $i->updated_at }}}</div>
  </div>
  <hr>
@endforeach

</body>

</html>
