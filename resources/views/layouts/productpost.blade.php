
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ADD PRODUCT</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
           Add Product
         </div>
         <form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="field">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Product name</label>
            </div>
            <div class="field">
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Product price</label>
            </div>
            <div class="field">
                <input id="detail" type="text" class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{ old('detail') }}" required autocomplete="detail" autofocus>

                @error('detail')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               <label>Product detail</label>
            </div>
            <div >
               <label>Product image</label>

                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image" autofocus>
            </div>
            
            <div class="field">
               <input type="submit" value="Login">
                            
            </div>
         </form>
      </div>
   </body>
</html>
