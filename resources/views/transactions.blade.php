<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passports</title>
</head>
<body>
    <style>
        .uper {
            margin-top: 40px;
        }
        
        thead, td {
            border: 1px solid;
            padding: 5px
        }
    </style>
    <div class="uper">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Passport ID</td>
                    <td>Sender ID</td>
                    <td>Receiver ID</td>
                    <td>Received</td>
                    <td>Attachments</td>
                    <td>Created At</td>
                    <td>Updated At</td>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{$transaction->id}}</td>
                    <td>{{$transaction->passport_id}}</td>
                    <td>{{$transaction->sender_id}}</td>
                    <td>{{$transaction->receiver_id}}</td>
                    <td>{{$transaction->received}}</td>
                    <td>{{$transaction->attachments}}</td>
                    <td>{{$transaction->created_at}}</td>
                    <td>{{$transaction->updated_at}}</td>
                    <td>
                        <form action="{{ route('transactions.destroy', $transaction->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>