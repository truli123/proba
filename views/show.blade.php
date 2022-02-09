
@extends('layouts.app')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="card-header">pregled</div>
 <div class="card-body">
 Za abecedni redosljed klikni na Naziv filma
        <table class="table sortable">

           <tr><th>plakat</th><th>Naziv filma</th><th>žanr</th><th>trajanje</th><th>godina snimanja</th></tr>
           <br></br>
           
           @foreach ($film as $f ) 
      <?php
      $prvo=$f->naslov;
      $prvoslovo=$prvo[0];
            ?>
@if ($prvoslovo==$slovo)
<tr>
     <td> <img src="{{$f->image}}" height="20px" />      </td>
     <td> {{$f->naslov}}     </td>
     <td> {{$f->ime->naziv}} </td>
     <td> {{$f->trajanje}}   </td>
     <td> {{$f->godina}}     </td>
     
            </tr>
            @endif
            @endforeach
    </table>

    
           <a href='http://localhost/seminar/public/' class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">povratak</a>
                           
                            </div>                    
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






