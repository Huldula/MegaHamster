import { Component, OnInit } from '@angular/core';
import {DataService} from '../../services/data-service/data.service';
import {Observable} from 'rxjs';
import {Room} from '../../models/room-interface';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }
}
