import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { HomeComponent } from './components/home/home.component';
import { ProductsComponent } from './components/products/products.component';
import { ImprintComponent } from './components/imprint/imprint.component';
import { PrivacyComponent } from './components/privacy/privacy.component';
import { NavBarComponent } from './components/nav-bar/nav-bar.component';
import { RealEstateComponent } from './components/products/real-estate/real-estate.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ProductsComponent,
    ImprintComponent,
    PrivacyComponent,
    NavBarComponent,
    RealEstateComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
