
<!DOCTYPE html>
	
@extends('layouts.layout')

@section('mohtava')
 <!-- Main Content-->
 
               <div>
                    <form action="/search" method="get">
					
                    &nbsp; <input style=" font-family: Bnazanin ; display: block;width: 50 px;height: 30px;margin-left:40%" type="text" name="data" placeholder="عنوان مقاله"/> 
					&nbsp; <input class="btn btn-success" style="width: 100px;margin-top:30px;margin-left:40% "type="submit" value="جستجو" />
                    </form>
             </div>
				
      <link href="css/styles.css" rel="stylesheet" />
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
					
					
                    <div class="post-preview">
                        <a href="/lastarticles">
                            <h2 dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-title">√ مقاله ها  </h2>
                        </a>
                        <p dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-meta">
                            این مقاله ها توسط دانش آموزان و دبیران
                            <a dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" href="/about_us">دبیرستان غیردولتی الهه </a>
                            نوشته و در این وب سایت ثبت شده اند
                        </p>
                    </div>
					
					
					
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/get_bestarticles"><h2 dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-title"> √ پرطرفدارترین مقاله ها  </h2></a>
						
                        <p dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-meta">
  
							مقاله هایی که بیشتر مورد توجه مخاطبان قرار گرفته اند
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/lessons">
                            <h2 style = "; font-weight: bold ;  font-family: Bnazanin" class="post-title" dir="rtl"> √ لیست موضوعات  </h2>
                        </a>
                        <p dir="rtl" style = "; font-weight: bold ;  font-family: Bnazanin" class="post-meta">
                          موضوعاتی که میتوانید در رابطه آن ها مقاله بنویسید
        
                        </p>
        
                    <hr class="my-4" />
                    <!-- Pager-->
                </div>
            </div>
        </div>
    </body>
</html>

@endsection
