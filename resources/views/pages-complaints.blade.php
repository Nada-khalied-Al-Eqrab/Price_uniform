@extends('layeout.master')

@section('title',' الشكاوى و الرد على الشكاوى  | سعرك موحد')

@section('page')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>الصفحات</h1>&nbsp;
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">الشكاوى و الرد على الشكاوى </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <section class="section faq">
        <div class="row">

            <!-- F.A.Q Group 1 -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">جميع الشكاوى </h5>

                <div class="accordion accordion-flush" id="faq-group-1">


                 @foreach ($complaints as $item)
                    <div class="card" >
                        <div class="card-body">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsOne-{{$item -> C_ID}}" type="button" data-bs-toggle="collapse">
                       <b>الاسم :  </b>  {{$item -> C_name}}&nbsp;&nbsp;&nbsp;&nbsp; <b>  نوع السلعة :</b>{{$item -> C_item_complained}}  &nbsp;&nbsp;&nbsp;&nbsp;<b> التاريخ :</b> {{$item -> C_date_complaint}}
                      </button>
                    </h2>
                    <div id="faqsOne-{{$item ->	C_ID}}" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                      <div class="accordion-body">
                        <br>
                        <b>الايميل :   </b> {{$item ->	C_email}}&nbsp;&nbsp;&nbsp;
                        <br>
                        <b>رقم الوتساب : </b>  {{$item -> C_whats_up}}&nbsp;&nbsp;&nbsp;&nbsp;
                        <br>
                        <b>نص الشكوى : </b> {{$item -> C_text_of_the_complaint }}
                        {{-- <br>  <br>  <br>
                        <div class="col-lg-6">
                        <div>
                        <textarea class="form-control" name="message" rows="5" placeholder="الرد على الشكوى" required></textarea>
                        <br>
                        <button class="btn btn-primary w-100" type="submit" style="background: #a01818 ; border :#a01818 ;  ">الرد على الشكوى  </button>
                       </div>
                    </div> --}}
                 </div>
            </div>
         </div>
            </div>
               </div>
                 @endforeach

                </div>
              </div>
            </div><!-- End F.A.Q Group 1 -->



        </div>
      </section>

  </main><!-- End #main -->

  @endsection
