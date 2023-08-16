import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppComponent } from './app.component';
import { TrailerListComponent } from './trailer-list.component';
import { TrailerRentalService } from './services/trailer-rental.service';

@NgModule({
  declarations: [AppComponent, TrailerListComponent],
  imports: [BrowserModule, HttpClientModule],
  providers: [TrailerRentalService],
  bootstrap: [AppComponent]
})
export class AppModule {}
