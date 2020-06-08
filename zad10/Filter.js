import React from 'react'

class Filter extends React.Component{

    constructor(props) {
        super(props)
    }

    render() {
    return (<div className="filterstyle">
        <input type="checkbox" onChange={this.props.handleFilter}/>
        <p>hide completed</p>
    </div>)
    }
}

export default Filter