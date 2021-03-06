@extends('main')

@section('title', '| Vizualizare Proiect')

@section('container')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $project->title }}</h1>
			<p class="lead">{{ $project->body }}</p>
		</div>
	
		<div class="col-md-4">
			<div class="well">
				{{-- <dl class="dl-horizontal">
					<label>Url:</label>
					<p>
						<a href="{{ url('blog/'.$project->slug) }}">{{url('blog/'.$project->slug)  }}</a>
					</p>
				</dl> --}}

				<dl class="dl-horizontal">
					<label>Creat la data:</label>
					<p>{{ date('M j, Y H:i',strtotime($project->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Ultima modificare:</label>
					<p>{{ date('M j, Y H:i',strtotime($project->updated_at)) }}</p>
				</dl>

				<hr>
				
				<div class="row">
					<div class="col-sm-6"> 
						{{-- <form method="POST" action="{{ route('projects.edit',$project->id) }}">
							<input type="submit" value="Edit" class="btn btn-primary btn-block"> 
							<input type="hidden" name="_token" value="{{ Session::token() }}"> 
						</form>  --}}
						<a href="{{ route('projects.edit',$project->id) }}" class="btn btn-primary btn-block">Modifica</a>
					</div> 
					<div class="col-sm-6"> 
						
						<form method="POST" action="{{ route('projects.destroy', $project->id) }}"> 
							<input type="submit" value="Delete" class="btn btn-danger btn-block"> 
							<input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('DELETE') }}
						</form>

						{{-- <a href="{{ route('projects.destroy', $project->id) }}" class="btn btn-danger btn-block">Delete</a> --}}
					</div>

					<div class="row">
						<div class="col-sm-8 col-md-offset-2"> 
							<br> 
							<a href="{{ route('projects.index') }}" class="btn btn-default btn-block"> << Toate proiectele</a> 
						</div> 
					</div><!-- /.row -->﻿
				</div>
			</div>
		</div>
	</div>
@endsection