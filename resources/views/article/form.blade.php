<label for="name">Name</label>
<small class="font-italic text-muted">(Provide a concise name for the article that will help describe what the article is about.)</small>
<input id="name" name="name" class="form-control mb-4" value="{{ old('name') ?? $article->name }}" required autofocus>

<label for="content">Content</label>
<textarea id="content" name="content" rows="20" cols="12" class="form-control mb-4" >{{ old('content') ?? $article->content }}</textarea>

<button type="submit" class="btn btn-primary">Submit</button>
