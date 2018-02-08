<div class="card">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="{{ $message->image }}">
  </div>
  <div class="card-content">
    <blockquote>Escrito por <a href="/{{ $message->user->username }}"> {{ $message->user->username }} </a></blockquote>
    <span class="card-title activator grey-text text-darken-4">{{ $message->content }}<i class="material-icons right">more_vert</i></span>
    <p><a href="/messages/{{ $message->id }}">Leer más</a></p>
    <span class="right">{{ $message->created_at }}</span>
  </div>
  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">{{ $message->content }}<i class="material-icons right">close</i></span>
    <p>{{ $message->content}}</p>
  </div>
</div>