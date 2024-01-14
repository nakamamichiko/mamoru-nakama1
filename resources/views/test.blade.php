<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="ja">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>大分市の避難所</title>

    </head>
    <body>
        <div>
            <p>避難所までのマップをいてるテストです！！下記避難所の文字をクリックしてみてください！！</P>
            <a href="https://www.google.com/maps/d/edit?mid=1ewF0SIQrkiZYbGLaufUzytts8ydjlNs&usp=sharing   ">避難所へのマップ</a>
            
        </div>

        <iframe src="https://www.google.com/maps/d/embed?mid=1ewF0SIQrkiZYbGLaufUzytts8ydjlNs&ehbc=2E312F" width="640" height="480"></iframe>

        <div id="map" style="height:500px"> </div>
        
	                                           
        <script src="{{ asset('/js/result.js') }}"></script> 
　　　　　<script src="https://maps.googleapis.com/maps/api/jslanguage=ja&region=JP&key=AIzaSyAUlFAZjTXXrVZs1j7-Q67QCBRHRq7KpI8&callback=initMap" async defer>
	</script> 
    </body>

</html>