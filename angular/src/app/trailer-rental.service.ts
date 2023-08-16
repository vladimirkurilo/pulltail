import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class TrailerRentalService {
  private apiBaseUrl = 'https://us-central1-pulltail-admin.cloudfunctions.net/api';
  private apiKey = 'x0z1SaAdfas03djy22AQpTm4cgv_e2dAzMqzw1AdzO_04AcvAoETd1x923Ad0_6ZfxIoAd21A23AsPdP12fPT1M';

  constructor(private http: HttpClient) {}

  getAvailableTrailers(
    periodType: string,
    periodCount: number,
    dateStart: string,
    dateEnd: string
  ): Observable<any> {
    const headers = new HttpHeaders({
      'Authorization': `Bearer ${this.apiKey}`
    });

    const params = new HttpParams()
      .set('periodType', periodType)
      .set('periodCount', periodCount.toString())
      .set('dateStart', dateStart)
      .set('dateEnd', dateEnd);

    return this.http.get(`${this.apiBaseUrl}/{endpoint}`, { headers, params });
  }
}