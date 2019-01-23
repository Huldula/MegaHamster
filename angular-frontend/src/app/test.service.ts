import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class TestService {

  constructor(private http: HttpClient) {
  }

  public test() {
    this.http.get("/api/getProducts.php").subscribe(console.log);
  }
}
