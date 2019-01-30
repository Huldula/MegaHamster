import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';
import {Room} from '../../models/room-interface';
import {Router} from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private http: HttpClient, private router: Router) {}

  public getProducts(): Observable<Room[]> {
    return this.http.get<Room[]>('/api/getProducts.php');
  }

  public getProductsHtml(): Observable<string> {
    const id: string = this.router.url.split('?')[1];
    const ext: string = id === undefined ? '' : '?' + id;
    // @ts-ignore
    return this.http.get<string>(`/api/fluid/index.php${ext}`, {responseType: 'text'});
  }
}
