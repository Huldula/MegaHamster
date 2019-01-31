import {Component, Input, OnInit} from '@angular/core';
import {Room} from '../../models/room-interface';

@Component({
  selector: 'app-real-estate',
  templateUrl: './real-estate.component.html',
  styleUrls: ['./real-estate.component.scss']
})
export class RealEstateComponent implements OnInit {

  @Input()
  room: Room;

  constructor() { }

  ngOnInit() {
  }

  public gotoShop(name: string): void {
    // TODO
    console.log(`enter shop ${name}`);
  }
}
