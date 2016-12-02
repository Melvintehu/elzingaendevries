@extends('cms.master')

@section('title')
    Discipline aanpassen
@stop

@section('content')
    <h1> Discipline <span style="font-weight:Bold">{{ $data['discipline']->name }}</span> beheren </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                           
                                                 {!! Form::model($data['discipline'],
                                                    array(
                                                        'method' => 'PUT',
                                                        'action' => ['DisciplineController@update', $data['discipline']->id]
                                                        )
                                                    )
                                                !!}
                                                <thead>

                                                    <table class="table table-hover">
                                                    <tbody>
                                                        

                                                        <tr>
                                                           <td>
                                                                {!! Form::label('name', ' De naam van de discipline ') !!} 
                                                                {!! Form::text('name', null, ['required'=>'true', 'class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>   
 
                                                <div class='form-group'>
                                                    <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                </div>

                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->


           
           

               


        </div>


    </div>

@stop
