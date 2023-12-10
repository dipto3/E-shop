
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/js/loader.js')}}"></script>
<script>
  $(document).ready(function () {
      $('#subscribe_submit').click(function (e) {
          e.preventDefault();
          var email = $('#email_subscribe').val();
          if (email == '') {
              toastr.error('Please Enter Your Email');
          } else {
              $.ajax({
                  url: "{{ url('/subscribe-us') }}",
                  type: "POST",
                  data: {
                      "email": email,
                      "_token": "{{csrf_token()}}"
                  },
                  success: function ({message,status:code}, status) {
                      if (status === 'success') {
                          if(code==202){
                              toastr.error('You Have Already Subscribed');
                              return false;
                          }
                          $.ajax({
                              url: "{{ url('/check-subscribe-mail') }}",
                              type: "POST",
                              data: {
                                  "email": email,
                                  "_token": "{{csrf_token()}}"
                              },
                              success: function (data) {
                                  toastr.success('You Are Subscribed');
                              },
                          });
                      }
                  },
              });
          }
      });
  })
</script>
<script>
  $(document).ready(function(){

    $("#billtoship").click(function(){

      if(this.checked){
        $("#ship_name").val($("#bill_name").val());
        $("#ship_email").val($("#bill_email").val());
        $("#ship_phone").val($("#bill_phone").val());
        $("#ship_add").val($("#bill_add").val());
        $("#ship_city").val($("#bill_city").val());
        $("#ship_district").val($("#bill_district").val());
        $("#ship_zip").val($("#bill_zip").val());
      }else{
        $("#ship_name").val('');
        $("#ship_email").val('');
        $("#ship_phone").val('');
        $("#ship_add").val('');
        $("#ship_city").val('');
        $("#ship_district").val('');
        $("#ship_zip").val('');
      }
    });

  });
</script>