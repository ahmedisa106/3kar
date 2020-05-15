
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



@if (session('success'))
    <script >
        Swal.fire({
            position: 'top-left',
            icon: 'success',
            title: 'تم إاضافه البيانات بنجاح',
            showConfirmButton: false,
            timer: 2500
        })


    </script>

@endif

@if (session('updated'))
    <script >
        Swal.fire({
            position: 'top-left',
            icon: 'success',
            title: 'تم تعديل البيانات بنجاح',
            showConfirmButton: false,
            timer: 2500
        })

    </script>

@endif

@if (session('deleted'))

    <script >


        Swal.fire({
            position: 'top-left',
            icon: 'success',
            title: 'تم حذف البيانات بنجاح',
            showConfirmButton: false,
            timer: 2500
        })



    </script>



@endif

@if (session('undeleted'))

    <script >


        Swal.fire({
            position: 'top-left',
            icon: 'error',
            title: 'لا يممكن تعديل هذه البيانات ',
            showConfirmButton: false,
            timer: 2500
        })



    </script>




@endif
@if (session('send'))

    <script >


        Swal.fire({
            position: 'top-left',
            icon: 'suucess',
            title: 'تم إرسال الرساله بنجاح',
            showConfirmButton: false,
            timer: 2500
        })



    </script>




@endif


@if (session('error'))

    <script >


        Swal.fire({
            position: 'top-left',
            icon: 'error',
            title: 'fail',
            showConfirmButton: false,
            timer: 2500
        })



    </script>




@endif
