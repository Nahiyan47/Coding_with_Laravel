<div>
@foreach ($data as $key)
<ul>
   <li><a href="/user/{{$key->id}}">{{$key->customer_name}}</a></li>
   <li>{{$key->phone}}</li>
 </ul> 
@endforeach
</div>