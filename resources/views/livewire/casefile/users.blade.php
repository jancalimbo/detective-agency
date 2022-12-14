<div>
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            <button class="btn btn-info">
                                View
                            </button>
                            <button class="btn btn-info">
                                Disable
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
