import { Component, OnInit } from '@angular/core';
import {DataService} from '../../services/data-service/data.service';
import {Observable} from 'rxjs';
import {Room} from '../../models/room-interface';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  public rooms: Observable<Room[]>;

  constructor(private data: DataService) { }

  ngOnInit() {
    this.rooms = this.data.getProducts();
  }

}
