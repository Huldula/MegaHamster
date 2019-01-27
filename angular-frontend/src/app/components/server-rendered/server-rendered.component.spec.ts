import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ServerRenderedComponent } from './server-rendered.component';

describe('ServerRenderedComponent', () => {
  let component: ServerRenderedComponent;
  let fixture: ComponentFixture<ServerRenderedComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ServerRenderedComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ServerRenderedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
