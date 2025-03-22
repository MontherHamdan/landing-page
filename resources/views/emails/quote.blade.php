@component('mail::message')
# New Quote Request

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Phone:** {{ $data['phone'] }}  
**Subject:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}

Thanks,  
{{ config('app.name') }}
@endcomponent
