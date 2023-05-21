<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BackGate</title>
        @vite('resources/js/app-layout.js')
             {{--  --}}
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
             {{--  --}}
         
             </head>
             <style>
                   <style>
             * {
             padding: 0;
             margin: 0;
             box-sizing: border-box;
         }
         
         .bodyClass {
             width: 100%;
             min-height: 100vh;
             overflow: hidden;
             display: flex;
             align-items: center;
             justify-content: center;
         }
         
         .myBorder {
             border-radius: 5px;
         }
         
         .myBody {
             width: 100%;
             min-height: 100vh;
             background: #000;
             /* display: flex;
           align-items: center;
           justify-content: center; */
         }
         
         .right-side2 {
             max-width: 1100px;
             border-radius: 10px;
             background: linear-gradient(135deg, #222528, #33373a);
             -webkit-backdrop-filter: blur(10px);
             backdrop-filter: blur(10px);
         }
         
         .right-side3 {
             background: linear-gradient(135deg, #222528, #33373a);
         }
         
         .right-side {
             max-width: 1100px;
             border-radius: 10px;
             background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4));
             -webkit-backdrop-filter: blur(10px);
             backdrop-filter: blur(10px);
         }
         
         .form {
             max-width: 400px;
         } /*# sourceMappingURL=main.css.map */
         
           </style>
    <body class="bg-black bodyClass">
        {{-- @yield('content') --}}
        {{ $slot }}

        {{--  --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     {{--  --}}
    </body>
</html>
