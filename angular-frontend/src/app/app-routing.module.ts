import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {HomeComponent} from './components/home/home.component';
import {ProductsComponent} from './components/products/products.component';
import {ImprintComponent} from './components/imprint/imprint.component';
import {PrivacyComponent} from './components/privacy/privacy.component';
import {ServerRenderedComponent} from './components/server-rendered/server-rendered.component';
import {ShopComponent} from './components/shop/shop.component';

const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home', component: HomeComponent},
  { path: 'shop', component: ShopComponent},
  { path: 'products', component: ProductsComponent},
  { path: 'server-rendered', component: ServerRenderedComponent},
  { path: 'imprint', component: ImprintComponent},
  { path: 'privacy', component: PrivacyComponent}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
