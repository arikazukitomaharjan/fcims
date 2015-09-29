@extends('adminMaster')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Club</a>
        </li>
        <li>
            <a href="#">Create</a>
        </li>
    </ul>
@stop

@section('adminContent')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b>Add Club</b></center></div>

                    <div class="panel-body">
                            {!! Form::open(['route'=>'clubs.store','files' => true])!!}
                            <fieldset>
                                <div class="col-md-6">
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                
                                  <div class="form-group">
                                         <label><b>Establish Date </b></label>
                                         {!! Form::text('est_date',null,array('class'=>'form-control dropdate','id'=>'calender')) !!}
                                          <img src="{{ url('public/img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender')" style="cursor:pointer"/>
                                   
                                    </div>
                                 <div class="form-group">
                                     <label><b>CEO</b></label>
                                     {!! Form::text('CEO',null,array('class'=>'form-control')) !!}

                                 </div>
                                 <div class="form-group">
                                     <label><b>CONTACT</b></label>
                                     {!! Form::text('contact_no',null,array('class'=>'form-control')) !!}

                                </div>
                               <div class="form-group">
                                    <label><b>EMAIL</b></label>
                                    {!! Form::text('email_id',null,array('class'=>'form-control'))!!}
                                </div>
                                <div class="form-group">
                                    <label><b>WEBSITE</b></label>   
                                    {!! Form::text('website',null,array('class'=>'form-control'))!!}
                                </div>
                               <div class="form-group">
                                    <label><b>IMAGE</b></label>
                                    {!! Form::file('image_file',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                                    {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
                                </div>
                               
                                 
</div>
 <div class="col-md-6">
  <div class="form-group">
                                     <label><b>COUNTRY </b></label>
                                     {!! Form::select('country',[
                                    'nepal'=>'nepal'],null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DEVELOPMENT REGION</b></label>
                                     {!! Form::select('development_region', [
                                    'central development region'=>'Central development region',
                                    'easter development region'=>'easter development region' ,
                                     'mid-western development region'=>'mid-western development region' ,
                                      'far-western development region'=>'far-western development region' ,
                                        'western development region'=>'western development region'  ,                             

                                    ],null,['class'=>'form-control tag']) !!}

                                 </div><br>
                                   <div class="form-group">
                                     <label><b>ZONE</b></label>
                                     {!! Form::select('zone', [
                                                                    
                                         'bagmati'=>'bagmati',
                                    'seti'=>'seti',
                                    'rapti'=>'rapti',
                                    'narayani'=>'narayani',
                                    'dhawalagiri'=>'dhawalagiri',
                                    'mechi'=>'mechi',
                                    'mahakali'=>'mahakali',
                                    'koshi'=>'koshi',
                                    'SAGARMATH'=>'SAGARMATH',
                                    'JANAKPUR '=>'JANAKPUR ',
                                    'GANDAKI '=>'GANDAKI ',
                                    'LUMBINI '=>'LUMBINI ',
                                    'KARNALI '=>'KARNALI ',
                                   'bheri'=>'bheri',
                                    ],null,['class'=>'form-control tag']) !!}
                                 </div><br>
                                   <div class="form-group">
                                     <label><b>DISTRICT</b></label>
                                     {!! Form::select('district', [
                                    'Achham'=>'Achham',
                                    'Arghakhanchi'=>'Arghakhanchi',
                                    
                                    'Baglung'=>'Baglung',
                                    'Baitadi'=>'Baitadi',
                                    'Bajhang'=>'Bajhang',
                                    'Banke'=>'Banke',
                                    'Bara'=>'Bara',
                                    'Bardiya'=>'Bardiya',
                                    'Bhaktapur'=>'Bhaktapur',
                                    'Bhojpur'=>'Bhojpur',
                                    'Chitwan'=>'Chitwan',
                                    'Dadeldhura'=>'Dadeldhura',
                                    'Dailekh'=>'Dailekh',
                                    'Dang'=>'Dang',
                                    'Darchula'=>'Darchula',
                                    'Dhading'=>'Dhading',
                                    'Dhankuta'=>'Dhankuta',
                                    'Dhanusa'=>'Dhanusa',
                                    'Dholkha'=>'Dholkha',
                                    'Dolpa'=>'Dolpa',
                                    'Doti'=>'Doti',
                                    'Gorkha'=>'Gorkha',
                                    'Gulmi'=>'Gulmi',
                                    'Humla'=>'Humla',
                                    'Ilam'=>'Ilam',
                                    'Jajarkot'=>'Jajarkot',
                                    'Jhapa'=>'Jhapa',
                                    'Jumla'=>'Jumla',
                                    'Kailali'=>'Kailali',
                                    'Kalikot'=>'Kalikot',
                                    'Kanchanpur'=>'Kanchanpur',
                                    'Kapilvastu'=>'Kapilvastu',
                                    'Kaski'=>'Kaski',
                                    'Kathmandu'=>'Kathmandu',
                                    'Kavrepalanchok'=>'Kavrepalanchok',
                                    'Khotang'=>'Khotang',
                                    'Lalitpur'=>'Lalitpur',
                                    'Lamjung'=>'Lamjung',
                                    'Mahottari'=>'Mahottari',
                                    'Makwanpur'=>'Makwanpur',
                                    'Manang'=>'Manang',
                                    'Morang'=>'Morang',
                                    'Mugu'=>'Mugu',
                                    'Mustang'=>'Mustang',
                                    'Myagdi'=>'Myagdi',
                                    'Nawalparasi'=>'Nawalparasi',
                                    'Okhaldhunga'=>'Okhaldhunga',
                                    'Palpa'=>'Palpa',
                                    'Panchthar'=>'Panchthar',
                                    'Parbat'=>'Parbat',
                                    'Parsa'=>'Parsa',
                                    'Pyuthan'=>'Pyuthan',
                                    'Ramechhap'=>'Ramechhap',
                                    'Rasuwa'=>'Rasuwa',
                                    'Rautahat'=>'Rautahat',
                                    'Rolpa'=>'Rolpa',
                                    'Rukum'=>'Rukum',
                                    'Rupandehi'=>'Rupandehi',
                                    'Salyan'=>'Salyan',
                                    'Sankhuwasabha'=>'Sankhuwasabha',
                                    'Saptari'=>'Saptari',
                                    'Sarlahi'=>'Sarlahi',
                                    'Sindhuli'=>'Sindhuli',
                                    'Sindhupalchok'=>'Sindhupalchok',
                                    'Siraha'=>'Siraha',
                                    'Solukhumbu'=>'Solukhumbu',
                                    'Sunsari'=>'Sunsari',
                                    'Surkhet'=>'Surkhet',
                                    'Syangja'=>'Syangja',
                                    'Tanahu'=>'Tanahu',
                                    'Taplejung'=>'Taplejung',
                                    'Terhathum'=>'Terhathum',
                                    'Udayapur'=>'Udayapur',                        

                                    ],null,['class'=>'form-control tag']) !!}

                                 </div><br>
                                  <div class="form-group">
                                     <label><b>MUNICIPALITY </b></label>
                                     {!! Form::select('municipality', [
                                    'Nepal'=>'Central development region',
                                    'India'=>'easter development region'                                  

                                    ],null,['class'=>'form-control tag']) !!}
                                 </div><br>
                                 <div class="form-group">
                                     <label><b>WARD NO.</b></label>
                                     {!! Form::select('ward_no', [
                                    '1'=>'1',
                                     '2'=>'2',
                                      '3'=>'3',
                                       '4'=>'4',
                                        '5'=>'5',
                                         '6'=>'6',
                                          '7'=>'7',
                                           '8'=>'8',
                                            '9'=>'9',
                                             '10'=>'10',
                                      '11'=>'11',
                                       '12'=>'12',
                                        '13'=>'13',
                                         '14'=>'14',
                                          '15'=>'15',
                                           '16'=>'16',
                                            '17'=>'17',
                                             '18'=>'18',
                                              '19'=>'19',
                                       '20'=>'20',
                                        '21'=>'21',
                                         '22'=>'22',
                                          '23'=>'23',
                                           '24'=>'24',
                                            '25'=>'25',
                                             '26'=>'26',
                                              '27'=>'27',
                                               '28'=>'28',
                                                '29'=>'29',
                                                 '30'=>'30',
                                                 
                                          '31'=>'31',
                                           '32'=>'32',
                                            '33'=>'33',
                                             '34'=>'34',
                                              '35'=>'35',
                                                                       ],null,['class'=>'form-control tag']) !!}

                                 </div>
                                  <div class="form-group">
                                     <label><b>TOLE</b></label>
                                     {!! Form::text('tole',null,array('class'=>'form-control')) !!}

                                 </div>

                                </div>
                                <br><br>
                                <center>{!! form::submit('Add Club',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop
@section('js_code')
    <script>
       $(function(){
            
            $('.tag').select2({
                placeholder:'select ',
                 theme: "classic",              
                 
                 tokenSeparators: [',', ' ']
 
               
                
            });

        });
    </script>
   
<link href="{{asset('js/select/css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('js/select/css/select2.css')}}" rel="stylesheet">
<script src="{{ asset('js/select/js/select2.min.js') }}"></script>
<script src="{{ asset('js/select/js/select2.js') }}"></script>
@endsection
