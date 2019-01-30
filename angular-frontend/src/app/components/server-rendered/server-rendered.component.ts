import { Component, OnInit } from '@angular/core';
import { DataService } from '../../services/data-service/data.service';

@Component({
  selector: 'app-server-rendered',
  templateUrl: './server-rendered.component.html',
  styleUrls: ['./server-rendered.component.scss']
})
export class ServerRenderedComponent implements OnInit {

  public html: string;

  constructor(private data: DataService) { }

  ngOnInit() {
    this.data.getProductsHtml().subscribe(res => {
      this.html = res;
    });
  }

}
