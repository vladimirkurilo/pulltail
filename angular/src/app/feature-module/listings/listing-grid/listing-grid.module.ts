import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ListingGridRoutingModule } from './listing-grid-routing.module';
import { ListingGridComponent } from './listing-grid.component';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    ListingGridComponent
  ],
  imports: [
    CommonModule,
    ListingGridRoutingModule,
    SharedModule
  ]
})
export class ListingGridModule { }
