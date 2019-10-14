<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            
            <form action="{{route('articles.store')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" placeholder="nhap tieu de" name="tieude">
                <input type="description" placeholder="nhap" name="nhapthu">
                
               
                <div>
            <label for="">Content</label>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                    This is my textarea to be replaced with CKEditor.
             </textarea>
            </div>
            
            <button type="submit" class="btn btn-sm btn-danger   rounded-0">
                                  tao nguoi dung
                </button>
            </form>


            
            </div>
        </div>
    </div>
    <script src="http://localhost:8000/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
</html>