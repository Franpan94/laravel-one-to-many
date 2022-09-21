<form action="{{ route($routename, $post->id) }}" method="POST">
   @method($method)
   @csrf

   <div class="p-4">
       <input type="text" name="title" id="title" 
          value="{{ old('title', $post->title) }}" 
          placeholder="Inserisci titolo" required class="w-50"
        >
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
   </div>
   <div class="p-4">
      <textarea name="post_image" id="post_image" cols="40" rows="20" required placeholder="Inserisci immagine">
        {{ old('post_image', $post->post_image) }} 
      </textarea>
      @error('post_image')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
   </div>
   <div class="p-4">
    <textarea name="post_content" id="post_content" cols="50" rows="30" required placeholder="Inserisci descrizione">
      {{ old('post_content', $post->post_content) }} 
    </textarea>
    @error('post_content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
 </div>
   <div class="p-4">
      <button class="btn btn-primary">
          Invia
      </button>
   </div>
</form>
