<!DOCTYPE html>
<html>
<head>
    <title>Companies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Companies</h2>

    <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Add Company</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->location }}</td>
            <td>
                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
