import React, {Component} from 'react';
import {Route, Switch} from 'react-router-dom';
//layout
import Home from "./pages/Home.js";
import About from "./pages/About.js";
import Product from "./pages/Product.js";
import Topic from "./pages/Topic.js";
//product
import Add_product from "./product/Add.js";
import Edit_product from "./product/Edit.js";

class RouterPath extends Component {
    render() {
        return (
            <main>
                <Switch>
                    <Route exact path='/' component={Home}/>
                    <Route exact path='/about' component={About}/>
                    <Route exact path='/product' component={Product}/>
                    <Route exact path='/topic' component={Topic}/>
                    <Route exact path='/product/create' component={Add_product}/>
                    <Route exact path='/product/edit/:id' component={Edit_product}/>
                </Switch>
            </main>
        )
    }
}

export default RouterPath
