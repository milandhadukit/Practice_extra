<!DOCTYPE html>
<html>

<head>
    <title> Generate Bar Code </title>
</head>

<body>

    {{-- <h1> Generate Bar Code </h1> --}}
    {{--    
<h3>Product: 0001245259636</h3>
@php
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
@endphp
   --}}
    {{-- {!! $generator->getBarcode('0001245259636', $generator::TYPE_CODE_128) !!} --}}
   
    @php
        $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    @endphp


    @foreach ($a as $item)
        <br><br><br>

        <h5>Product:{{ $item->number }}</h5>
        <img
        src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($item->name, $generatorPNG::TYPE_CODE_128)) }}">
    @endforeach

        
    {{-- <img
        src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128)) }}"> --}}



</body>

</html>
