import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';
import {Room} from '../../models/room-interface';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private http: HttpClient) {}

  public getProducts(): Observable<Room[]> {
    return this.http.get<Room[]>('/api/getProducts.php');
  }
}
