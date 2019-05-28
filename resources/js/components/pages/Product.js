import React, {Component} from 'react';
import axios from 'axios';
import {Link} from 'react-router-dom';
import style from '../css/style.css';
import RouterPath from '../RouterPath';

class Product extends Component {
    constructor(props) {
        super(props);
        this.state = {value: '', products: ''};
        this.handleDelete = this.handleDelete.bind(this);
    }

    componentDidMount() {
        axios.get('/products')
            .then(response => {
                this.setState({ 
                	products: response.data 
                });
            })
            .catch(function (error) {
                console.log(error);
            })
    }
    handleDelete (id,e) {
	    e.preventDefault()
	    if (!confirm('Are your sure you want to delete this item?')) {
	      return false
	    }
	    let url = 'products/' + id
	    axios.delete(url)
	       .then(response => {
	           this.props.deleteRow(this.props.index)
	       })
	       .catch(function (error) {
	           console.log(error)
	       })
        //set lại list product
        var products = [...this.state.products];
        products.splice(this.props.index, 1);
        this.setState( {products} );
	}

    tabRow(_this) {
        if(this.state.products instanceof Array){
            return this.state.products.map(function(object, i){
                return (
                    <tr key = {i}>
                        <td>
                            { i = i + 1 }
                        </td>
                        <td>
                            { object.title }
                        </td>
                        <td>
                            { object.body }
                        </td>
                        <td>
				          <Link className='btn btn-primary' to={'/product/edit/' + object.id}>Edit</Link>
                          <button className='btn btn-danger delete' onClick= {(e) => _this.handleDelete(object.id, e)}>Delete</button>
				        </td>
                    </tr>
                );
            })
        }
    }

    render() {
        return (
            <div>
                <h1>Products List - Demo</h1>
                <div className="row">
                    <div className="col-md-10"></div>
                    <div className="col-md-2">
                    	<Link to={'/product/create'} className="color-white btn btn-success">Add Product</Link>
                    </div>
                    </div><br />
                <table className="table table-hover">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Product Title</td>
                        <td>Product Body</td>
                        <td width="200px">Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                        { this.tabRow(this) }
                    </tbody>
                </table>
            </div>
        )
    }
}

export default Product
