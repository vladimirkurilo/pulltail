import { Component, OnInit } from '@angular/core';
import { TrailerRentalService } from './services/trailer-rental.service';

@Component({
  selector: 'app-trailer-list',
  templateUrl: './trailer-list.component.html',
  styleUrls: ['./trailer-list.component.css']
})
export class TrailerListComponent implements OnInit {
  trailers: any[] = [];

  constructor(private trailerService: TrailerRentalService) {}

  ngOnInit(): void {
    this.loadTrailers();
  }

  loadTrailers(): void {
    const periodType = 'period_type'; //your_period_type
    const periodCount = 7; 
    const dateStart = '08-15-23';
    const dateEnd = '08-20-23'; 

    this.trailerService.getAvailableTrailers(periodType, periodCount, dateStart, dateEnd)
      .subscribe((data) => {
        this.trailers = data;
      });
  }
}
