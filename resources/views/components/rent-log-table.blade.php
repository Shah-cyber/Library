<div>
  
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($rentlog as $rentlog)
            <tr class="{{ $rentlog->actual_return_date == null ? '' : ($rentlog->return_date < $rentlog->actual_return_date ? 'text-bg-danger' : 'text-bg-success') }}">
                <td>{{$loop->iteration}}</td>
                <td>{{$rentlog->user->username}}</td>
                <td>{{$rentlog->book->title}}</td>
                <td>{{$rentlog->rent_date}}</td>
                <td>{{$rentlog->return_date}}</td>
                <td>{{$rentlog->actual_return_date}}</td>
                <td class="{{ 
                    $rentlog->actual_return_date == null ? 'bg-primary text-white font-weight-bold' : 
                    ($rentlog->actual_return_date > $rentlog->return_date ? 'bg-danger text-white' : 'bg-success text-white') 
                    }} font-weight-bold">
                    {{ $rentlog->actual_return_date == null ? 'Not Returned' : 
                        ($rentlog->actual_return_date > $rentlog->return_date ? 'Late Return' : 'On Time') 
                    }}
                </td>
                
                
            </tr>
            @endforeach
        </tbody>

    </table>
</div>