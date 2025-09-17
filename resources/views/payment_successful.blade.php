<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lusaka South College integrated portal">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo/lsuc_logo.jpeg')}}">
    <title>{{$paymentSuccesss->name}} Payment Successful</title>
    <link rel="stylesheet" href="{{asset('assets/css/payment_successfull.css')}}">
</head>
<body>
    <div class="receipt-container">
        
        @include('layouts.messages')

        <div class="header">
            <div class="flex items-center gap-3 justify-center mb-4">
              <img src="{{asset('assets/images/logo/lsuc_logo.jpeg')}}" class="logo h-16 w-auto" alt="Lusaka South College">
              <span class="text-xl font-bold text-gray-800">Lusaka South College</span>
            </div>
            <h1>LUSAKA SOUTH COLLEGE</h1>
            <p>LUSAKA, ZAMBIA</p>
            <p>BURSARY DEPARTMENT</p>
        </div>

        <div class="content">
            <p><strong>Received From:</strong></p>
            <p>Reg/Matriculation No: {{$paymentSuccesss->matric_no}}</p>
            <p>Full-Name: {{$paymentSuccesss->name}}</p>
            <p>Faculty/College: {{$paymentSuccesss->faculty}}</p>
            <p>Department: {{$paymentSuccesss->department}}</p>
            <p>Programme: {{$paymentSuccesss->programme}}</p>
            <p>Level: {{$paymentSuccesss->level}}</p>

            <p><strong>Receipt Number:</strong> {{$paymentSuccesss->receipt_no}}</p>
            <p><strong>Reference No:</strong> {{$paymentSuccesss->reference_no}}</p>
            <p><strong>Payment Date:</strong> {{$paymentSuccesss->created_at}}</p>

            <p><strong>Being Payment for:</strong> {{$paymentSuccesss->payment_name}}</p>
            <p><strong>Academic Session:</strong> {{$paymentSuccesss->academic_section}}</p>
            <p><strong>Amount Paid:</strong> {{$paymentSuccesss->amount_paid}}</p>
            <p><strong>Amount in words:</strong> {{$paymentSuccesss->amount_in_words}}</p>

            <div class="photo-container">
                <img style="width: 100px" src="{{asset('assets/images/students/' . Auth::guard('web')->user()->picture)}}" alt="{{$paymentSuccesss->name}}" title="{{$paymentSuccesss->name}}">
            </div>
        </div>

        <button class="print-button">Print</button>
    </div>
    <script>
        document.querySelector('.print-button').addEventListener('click', () => window.print());
    </script>
</body>
</html>