@extends('navbar')

@section('content')

        <div class="row align-items-center" id="sosdiv">
          <div class="col-sm-6" style="color: white;text-align: center;">
            <p>DISTRIBUIM</p>
            <p>GRATIS ALIMENTE</p>
            <p>PERSOANELOR</p>
            <p>AFLATE IN SITUATII CRITICE</p>
            <p>AI NEVOIE DE AJUTOR</p>
            <p>Cunosti persoane</p>
            <p>ce ar avea nevoie de ajutor?</p>

          </div>
          <div class="col-sm-6" style="background-color: white;">
                <form action="sendSosEmail" method="POST">
                    {{ csrf_field() }}
                    <div class="row noMargin">
                        <div class="col-sm-6">
                            <label class="labelTextSos" for="name">NUME:</label>
                         </div>
                         <div class="col-sm-6">
                            <label class="labelTextSos" for="phone">TELEFON:</label>
                         </div>
                    </div>
                    <div class="row noMargin">
                        <div class="col-sm-6">
                            <input class="inputTextSos" type="text" id="name" name="name" value="">
                        </div>
                        <div class="col-sm-6">
                            <input class="inputTextSos" type="text" id="phone" name="phone" value=""><br>
                        </div>
                    </div>
                    <div class="row noMargin">
                        <div class="col-sm-12">
                            <label class="labelTextSos" for="description">DESCRIERE CAZ:</label>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="textareaSos" name="description" id="description" rows="2"></textarea>
                         </div>
                    </div>

                    <input type="submit" value="Submit">
                </form>
            <div>
        </div>
    </div>
@stop

