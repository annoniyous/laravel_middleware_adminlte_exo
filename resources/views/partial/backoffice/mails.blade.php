<div class="container">
    {{-- tables des articles  --}}
    <h1 class="text-center pb-5"> Les mails reçus: </h1>
    <a href="/articles/create" class="btn btn-primary p-3 mb-5">Ajouter un article</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sujet</th>
            <th scope="col">Adresse Mail de l'auteur</th>
            <th scope="col">Message</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mails as $mail)
            <tr>
              <th scope="row"></th>
              <td>{{$mail->subject->subject}}</td>
              <td>{{$mail->mailClient}}</td>
              <td>{{$mail->messageClient}}</td>
              <td>
                <form action="/articles/{{$mail->id}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>