<label for="name">Name</label>
<small class="font-italic text-muted">(Provide a concise name for the article that will help describe what the article is about.)</small>
<div><small class="font-italic text-danger">{{ $errors->first('name') }}</small></div>
<input id="name" name="name" class="form-control mb-4" value="{{ old('name') ?? $article->name ?? '' }}" required autofocus>

<label for="content">Content</label>
<div><small class="font-italic text-danger">{{ $errors->first('content') }}</small></div>
<textarea id="content" name="content" rows="20" cols="12" class="form-control" >{{ old('content') ?? $article->content ?? '' }}</textarea>

<button type="submit" class="btn btn-primary mt-4">Submit</button>
