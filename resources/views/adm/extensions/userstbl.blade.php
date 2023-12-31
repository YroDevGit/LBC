

@foreach ($data as $d)
<tr>
    <td>{{$d -> id;}}</td>
    <td>{{$d->fullname}}</td>
    <td>{{$d->contact}}</td>
    <td>{{$d->address}}</td>
    <td>{{$d->fulldate}}</td>
    @if ($d->stat==0)
        <td><a href="" id="a"><button type="submit" class="btn btn-dark btn-fill pull-right">Verify</button></a></td>
    
    @elseif($d->stat ==1)
        <td><a href="{{url('/admin/verify?users='.$d->id)}}" id="a" onclick="return confirm('Are you sure to verify this user?')"><button type="submit" class="btn btn-info btn-fill pull-right">Verify</button></a></td>
    
        
    @endif
    
</tr> 

    
@endforeach