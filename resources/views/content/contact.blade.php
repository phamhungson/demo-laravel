@extends('content/master')
@section('main')
<div class="single_top">
	 <div class="container"> 
	  <div class="map">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	   </div>
	   <div class="col-md-9 contact_left">
		 	  <h1>LIÊN HỆ</h1>
	  			  <p>Điền thông tin để nhận hỗ trợ </p>
	  			 <form>
					<div class="column_2">
                     	<input type="text" class="text"  placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text"  placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:2.7%">
					 	<input type="text" class="text"  placeholder="" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:2.7%">
					</div>
					<div class="column_3">
	                   <textarea value="Message"  placeholder="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mô tả</textarea>
	                </div>
	                <div class="form-submit1">
			          <input type="submit" value="Send Message">
					</div>
					<div class="clearfix"> </div>
				  </form>
		 </div>
		 <div class="col-md-3 contact_right">
		 	<h2>THÔNG TIN</h2>
		 	<address class="address">
              <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
              <dl>
                 <dt></dt>
                 <dd>Freephone:<span> +1 800 254 2478</span></dd>
                 <dd>Telephone:<span> +1 800 547 5478</span></dd>
                 <dd>FAX: <span>+1 800 658 5784</span></dd>
                 <dd>E-mail:&nbsp; <a href="mailto@example.com">info(at)lashoop.com</a></dd>
              </dl>
           </address>
		 </div>
      </div>
</div> 
@endsection